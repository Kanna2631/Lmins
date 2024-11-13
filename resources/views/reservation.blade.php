<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<b><h1>【予約画面】</h1></b>
<h2>≪新規予約≫</h2>
<form method="POST" action="/reservations"> 
    @csrf 
    
1.カレンダーから日付を選択してください<br>
<input type="text" name="reservation[date]" id="date_val"/><br>
<div id="datepicker"></div><br>
<p class="body__error" style="color:red">{{ $errors->first('reservation.date') }}</p>

2.病院を選択してください。
<div class="clinic">
    <h3>クリニック選択</h3>
    <select name="reservation[clinic_id]">
        @foreach($clinics as $clinic)
            <option value="{{ $clinic->id }}">{{ $clinic->name }}</option>
        @endforeach
    </select>
</div>
<p class="body__error" style="color:red">{{ $errors->first('reservation.clinic_id') }}</p>
<br><br>


3.受診理由を選択してください。
<br>
    <select name="reservation[consultion_reason]">
    <option value=""> 選択してください</option>
    <option value="一般診療(発熱あり)">一般診療(発熱あり)</option>
    <option value="一般診療(発熱なし)">一般診療(発熱なし)</option>
    <option value="乳幼児健診">乳幼児健診</option>
    <option value="予防接種">予防接種</option>
    </select>
    <p class="body__error" style="color:red">{{ $errors->first('reservation.consultion_reason') }}</p>
    <br><br>

 4.受診を希望するお子様を選択してください。
         
    <div>
        <h3>受診を希望するお子様</h3>
        @foreach($children as $child)

            <label>
                {{-- valueを'$subjectのid'に、nameを'配列名[]'に --}}
                <input type="checkbox" value="{{ $child->id }}" name="reservation[child_id]">
                    {{$child->name}}
                </input>
            </label>
            
        @endforeach         
    </div>
    <p class="body__error" style="color:red">{{ $errors->first('reservation.child_id') }}</p>
    <input type="submit" value="予約"/>
</form><br>
<button class="btn" onclick="location.href='/dashboard'" > ☚Homeへ </button><br><br><br>
<tbody>
<h2>≪予約確認・キャンセル≫</h2>
     @foreach ($reservations as $reservation)
        <tr>
             <form action="{{ route('reservation.destroy', $reservation) }}" method="POST" onsubmit="return confirm('予約をキャンセルしてもよろしいですか？');">
                    @csrf
                    @method('DELETE')
                    {{ $reservation->child->name }}<br>
                    {{ $reservation->clinic->name }}<br>
                    {{ $reservation->date }}<br>
                    {{ $reservation->consultion_reason }}
                    
                     <button type="submit">キャンセル</button>
              </form>
             </td>
        </tr>
     @endforeach
</tbody>

 
<script>
$(function() {
    var dateFormat = 'yy-mm-dd';
    $("#datepicker").datepicker({
        dateFormat: dateFormat,
        minDate: 0,
        onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
        }
    });
});
</script>