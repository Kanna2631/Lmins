<form method="POST" action="{{ route('articles.search') }}" class="d-flex">
   @csrf
    <input class="form-control" name="city" type="text" placeholder="キーワード検索" aria-label="Search">
    <button class="input-group-text border-0" type="submit">検索</button><br><br>
    <button class="btn" onclick="location.href='/dashboard'" >☚Homeへ</button>
</form>
