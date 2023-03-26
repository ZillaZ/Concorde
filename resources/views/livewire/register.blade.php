<div>
    <form wire:submit.prevent="save">
    <h2> Create Account </h2>
        <label for="name">
            <p> Username </p>
            <input wire:model="name" type="text" required/>
            <br/>@error('name') <span class="error"> {{$message}} </span> @enderror
        </label>
        <label for="email">
            <p> E-mail </p>
            <input wire:model="email" type="text" required/>
            <br/>@error('email') <span class="error"> {{$message}} </span> @enderror
        </label>
        <label for="password">
            <p> Password </p>
            <input wire:model="password" type="text" required/>
            <br/>@error('password') <span class="error"> {{$message}} </span> @enderror
        </label>
        <button type="save"> Create Account </button>
        <i> {{$created}} </i>
    </form>
</div>

<style>
   body {
    background-color: #36393f;
    font-family: Arial, sans-serif;
    color: #fff;
}

form {
    background-color: #202225;
    padding: 20px;
    border-radius: 10px;
    margin: 20px auto;
    width: 350px;
}

h2 {
    margin: 0;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

p {
    margin: 0;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 5px;
    margin-top: 5px;
    margin-bottom: 10px;
    background-color: #2c2f33;
    border: none;
    border-radius: 5px;
    color: #fff;
}

button[type="submit"] {
    padding: 5px;
    background-color: #43b581;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #5dbb8a;
}

.error {
    color: #ff6961;
}
</style>