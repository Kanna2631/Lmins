<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お子様の情報入力</title>
    </head>
    <body>
        <h1>お子様の情報を入力してください</h1>
        <form action="/children" method="POST">
            @csrf
            <input type="hidden" name="child[user_id]" value={{ Auth::id() }} />    
            <div class="body">
                <h2>名前</h2>
                <textarea name="child[name]" placeholder="例:たなか　はなこ">{{ old('child.name') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('child.name') }}</p>
                
                <h2>生年月日</h2>
                <textarea name="child[birthday]" placeholder="例:2020-12-12">{{ old('child.birthday') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('child.birthday') }}</p>

                <h2>性別</h2>
                <textarea name="child[gender]" placeholder="例:女">{{ old('child.gender') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('child.gender') }}</p>

            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div><br>
        <button class="btn" onclick="location.href='/dashboard'" >☚Homeへ</button><br><br>
    </body>
</html>
            