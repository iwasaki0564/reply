<div>
  <h2>テンプレート一覧</h2>
  <h2>test<h2>
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
      <td>{{$template->japanese_template}}</td>
      <td>{{$template->english_template}}</td>
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
</div>