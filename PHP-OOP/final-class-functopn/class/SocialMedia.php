<?php

// jika kelas di berikan final maka tidak bisa di overide lagi
class SocialMedia{
    final public function login(){

    }
}

final class Facebook extends SocialMedia{
    // public function login(){} // Error
}

// class FakeFacebook extends Facebook{} // Error