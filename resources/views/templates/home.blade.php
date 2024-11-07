<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reply</title>
  <script src="https://kit.fontawesome.com/2378359dfe.js" crossorigin="anonymous"></script>
</head>
<body>
  <div>
    <h2>テンプレート一覧</h2>
    <a href="/create">追加</a>
    <table border="1">
      <tr>
        <th>施設名</th>
        <th>部屋番号</th>
        <th>テンプレ名</th>
        <th>日本語</th>
        <th>英語</th>
      </tr>
      @foreach($templates as $template)
      <tr>
        <td>{{$template->facility_name}}</td>
        <td>{{$template->room_number}}</td>
        <td>{{$template->template_name}}</td>
        <td>
          <span id="japanese-{{$template->id}}">
            {{$template->japanese_template}}
          </span>
          <a onclick="CopyClipboard('japanese-{{$template->id}}')" style="color: blue; text-decoration:underline;">
            <i class="fa-regular fa-copy"></i>
          </a>
        </td>
        <td>
          <span id="english-{{$template->id}}">
            {{$template->english_template}}
          </span>
          <a onclick="CopyClipboard('english-{{$template->id}}')" style="color: blue; text-decoration:underline;">
            <i class="fa-regular fa-copy"></i>
          </a>
        </td>
        <td><a href='/edit/{{$template->id}}'>編集</a></td>
        <td>
          <form method="POST" action="/delete/{{$template->id}}">
            @csrf
            <input type="submit" name="delete" value="削除">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <input type="text">
  </div>

  <script>
    function CopyClipboard(id){
      var text = document.getElementById(id).innerText;
      navigator.clipboard.writeText(text)
        .then(() => alert("コピーしました: " + text))
        .catch(err => alert("コピーに失敗しました: " + err));
    }
  </script>
</body>
</html>