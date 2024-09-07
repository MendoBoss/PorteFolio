@extends('layouts.portfolio')
@section('content')

    <div class="section__container">
        <div class="image">
            <div id="shaddow"></div>
            <img src="/images/image1_0.jpg" alt="profile">
        </div>
        <div class="content">
            <div class="input">
                <label for="name">Nom</label>
                <input type="text">
            </div>
            <div class="input">
                <label for="name">Prénom</label>
                <input type="text">
            </div>
            <div class="input">
                <label for="name">Adresse mail</label>
                <input type="email" name="mail" id="mail">
            </div>
            <div class="input">
                <label for="name">Telephone</label>
                <input type="tel" name="phone" id="phone">
            </div>
            <div class="input">
                <label for="name">Votre message</label>
                <textarea name="message" id="message" rows="5"></textarea>
            </div>
            <div class="input">
                <input type="submit" class="submit" value="Envoyer">
            </div>
        </div>
    </div>

@endsection