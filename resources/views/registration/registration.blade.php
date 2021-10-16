@extends('layouts.form')
@section('title')
Registration
@endsection
@section('forms')
    <div class="form-control">
        <br>
        <form action="{{ 'register' }}" method="post">
            <fieldset>
                {{ csrf_field() }}
                <legend>Registration Form:</legend>
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name="name" value="{{ old('username') }}">
                        </td>
                        <td>
                            @error('name')
                                <span>{{$message}}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            UserName:
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
                            Email:
                        </td>
                        <td>
                            <input type="text" name="email" value="{{ old('username') }}">
                        </td>
                        <td>
                            @error('email')
                                <span>{{$message}}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone Number:
                        </td>
                        <td>
                            <input type="text" name="phone" value="{{ old('username') }}">
                        </td>
                        <td>
                            @error('phone')
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
                        <td><input type="submit" name="register" value="Register"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    
    </div>
@endsection
