<!DOCTYPE HTML>
<html lang="ja">
    
    <body>
        <h1 class="title">
            {{ $child->title }}
        </h1>
        <div class="content">
            <div class="content__child">
                <h2>お子様プロフィール</h2>
                <p>{{ $child->name }}</p> 
                <p>{{ $child->birthday }}</p>   
                <p>{{ $child->gender }}</p>  
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a><br>
        </div>
        <button class="btn" onclick="location.href='/dashboard'" >☚Homeへ</button><br><br>
    </body>
</html>