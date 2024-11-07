<h2>テンプレ作成</h2>
<div>
  <form method="POST" action="/create">
    @csrf
    <p>
      施設名:<input type="text" name="facility_name">
    </p>
    <p>
      部屋番号:<input type="text" name="room_number">
    </p>
    <p>
      テンプレ名:<input type="text" name="template_name">
    </p>
    <p>
      日本語:<input type="text" name="japanese_template">
    </p>
    <p>
      英語:<input type="text" name="english_template">
    </p>
    <input type="submit" name="create" value="追加">
  </form>
  <a href="/">戻る</a>
</div>