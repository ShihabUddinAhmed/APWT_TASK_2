@extends('layouts.form')
@section('title')
Login
@endsection
@section('forms')
    <div class="form-control">
        <br>
        <form action="{{ 'login' }}" method="post">
            <fieldset>
                {{ csrf_field() }}
                <legend>Login:</legend>
                <table>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="text" name="username" value="{{ old('username') }}">
                        </td>
                        <td>
                            @error('username')
                                <span>{{$message}}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="password" value="">
                        </td>
                        <td>
                            @error('password')
                                <span>{{$message}}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" value="Log In"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    
    </div>
@endsection
