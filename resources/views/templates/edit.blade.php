<h2>編集</h2>
<div>
  <form method="POST" action="/edit">
    @csrf
    <input type="hidden" name="id" value="{{$template->id}}">
    <p>
      施設名：<input type="text" name="facility_name" value="{{$template->facility_name}}">
    </p>
    <p>
      部屋番号：<input type="text" name="room_number" value="{{$template->room_number}}">
    </p>
    <p>
      テンプレ名：<input type="text" name="template_name" value="{{$template->template_name}}">
    </p>
    <p>
      日本語：<input type="text" name="japanese_template" value="{{$template->japanese_template}}">
    </p>
    <p>
      英語：<input type="text" name="english_template" value="{{$template->english_template}}">
    </p>
    <input type="submit" name="edit" value="修正">
  </form>
  <a href="/">戻る</a>
</div>