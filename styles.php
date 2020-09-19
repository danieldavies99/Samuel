<?php
    header("Content-type: text/css; charset: UTF-8");
?>

* {
color: grey;
font-family: sans-serif;
}
.tall-margin {
    margin-bottom: 30px;
}
.centered-text{
    text-align: center;
}
@media only screen and (max-width: 600px) {
    .centered-relative {
    margin: auto;
    width: 85%;
    }
}
@media only screen and (min-width: 600px) {
    .centered-relative {
    margin: auto;
    width: 40%;
    }
}
.full-height{
    height: 100vh;
    overflow-y: hidden;
}
.centered {
    top: 40%;
    position: relative;
    left: 50%;
    width: 40%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.centered-large{
    top: 40%;
    position: relative;
    left: 50%;
    width: 70%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.square{
    width: 100%;
}
.title {
    font-size: 4rem;
}
.stat {
    position: fixed;
    margin: 1rem;
    font-size: 1.0rem;
    font-weight: 200;
}
.top-left {
    top: 0;
    left: 0;
}
.top-right {
    top: 0;
    right: 0;
}
.input {
    box-sizing: border-box;
    font-size: 1rem;
    padding: 10px;
    text-decoration: none;
    border: 1px grey solid;
}
.input:focus {
    outline:none;
    border: 1px black solid;
    background-color: white;
}

.button {
    box-sizing: border-box;
    margin-left: 5px;
    margin-top: 15px;
    font-size: 1rem;
    padding: 10px;
    cursor: pointer;
    text-decoration: none;
    border: none;
    background-color: grey;
    color: white;
    border: 1px grey solid;
}

.info-container{
    margin: 1rem;
    position: fixed;
    bottom: 0;
    left: 0;
}
.info h1 {
    position: relative;
    top: 0.15rem;
    line-height: 0.7rem;
    font-size: 1.2rem;
    display: inline-block;
    font-weight: 200;
}
.info img {
    margin-right: 0.15rem;
    vertical-align:middle;
}