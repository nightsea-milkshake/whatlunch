<h2>資料庫內資料</h2>

<form action="{{Url('ShowAllData')}}" method="GET">
    <table>
        <tr>
            <td>
                搜尋
            </td>
            <td>
                <input type="text" name="search">
            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>

<table>
    @foreach($alldata as $data)
        <tr>
            <td>
                {{$data->StoreName}}
            </td>
            <td>
                <input type="checkbox" name="checkdata">
            </td>
        </tr>
    @endforeach
</table>