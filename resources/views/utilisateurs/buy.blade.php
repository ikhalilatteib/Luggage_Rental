@extends('layouts.fixe-page')
@section('content')
    <div id="pip">
        <center>
            <h2>Kayit Olun</h2>
            <br>
            <form action="/buydone" method="POST">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <input type="text" name="vol" placeholder="FLIGHT" required>
                        </td>
                        <td>
                            <input  type="date" name="date" placeholder="DATE" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" name="depart" placeholder="DEPART" required>
                        </td>
                        <td>
                            <input type="time" name="arrived" placeholder="ARRIVED" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="from" placeholder="FROM" required>
                        </td>
                        <td>
                            <input type="text" name="to" placeholder="TO" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" >
                            <input style="width: 88%; height: 70px; " type="text" name="note" placeholder="Ne Alabilcağiniz Yazın" required>
                        </td>
                    </tr>
                    </tbody>
                </table><br>
                <button type="submit" class="btn btn-primary">Kayit Olun</button>
                @csrf
            </form>
        </center>
    </div>
@endsection
