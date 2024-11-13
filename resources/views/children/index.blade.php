<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<body>
    <h1>≪お子様情報≫</h1>
    <a href="/children/create">新規作成 ➡</a><br><br>
    <button class="btn" onclick="location.href='/dashboard'" >Homeへ</button><br><br>
    <div class="children">
        @foreach ($children as $child)
        <div class="child">
            <h2 class="name">
                <a href="/children/{{ $child->id }}">{{ $child->name }}</a>
            </h2>
            <p class="birthdate">生年月日: {{ $child->birthday }}</p>
            <p class="gender">性別: {{ $child->gender }}</p><br>
        </div>
        @endforeach
    </div>
    <div class="paginate">
        {{ $children->links() }}
    </div>
</body>
</html>
