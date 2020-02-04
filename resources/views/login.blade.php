@extends('layout')

    <h2>Log In</h2>

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>
