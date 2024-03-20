@extends('layouts.master')
@section('content')
<style>

.timeline {
  position: relative;
  width: 100%;
  padding: 30px 0;
}
.timeline .timeline-container {
  position: relative;
  width: 100%;
}
.timeline .timeline-end,
.timeline .timeline-start,
.timeline .timeline-year {
  position: relative;
  width: 100%;
  text-align: center;
  z-index: 1;
}
.timeline .timeline-end p,
.timeline .timeline-start p,
.timeline .timeline-year p {
  display: inline-block;
  width: 80px;
  height: 80px;
  margin: 0;
  padding: 30px 0;
  text-align: center;
  /* background: linear-gradient(#4F84C4, #00539C); */
  background: #fba0e3;
  border-radius: 100px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
}
.timeline .timeline-year {
  margin: 30px 0;
}
.timeline .timeline-continue {
  position: relative;
  width: 100%;
  padding: 60px 0;
}
.timeline .timeline-continue::after {
  position: absolute;
  content: "";
  width: 1px;
  height: 100%;
  top: 0;
  left: 50%;
  margin-left: -1px;
  background: #fba0e3;
}
.timeline .row.timeline-left,
.timeline .row.timeline-right .timeline-date {
  text-align: right;
}
.timeline .row.timeline-right,
.timeline .row.timeline-left .timeline-date {
  text-align: left;
}
.timeline .timeline-date {
  font-size: 14px;
  font-weight: 600;
  margin: 41px 0 0 0;
}
.timeline .timeline-date::after {
  content: '';
  display: block;
  position: absolute;
  width: 14px;
  height: 14px;
  top: 45px;
  /* background: linear-gradient(#4F84C4, #00539C); */
  background: #fba0e3;
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
  border-radius: 15px;
  z-index: 1;
}
.timeline .row.timeline-left .timeline-date::after {
  left: -7px;
}
.timeline .row.timeline-right .timeline-date::after {
  right: -7px;
}
.timeline .timeline-box,
.timeline .timeline-launch {
  position: relative;
  display: inline-block;
  margin: 15px;
  padding: 20px;
  border: 1px solid #dddddd;
  border-radius: 6px;
  background: #000000;
}
.timeline .timeline-launch {
  width: 100%;
  margin: 15px 0;
  padding: 0;
  border: none;
  text-align: center;
  background: transparent;
}
.timeline .timeline-box::after,
.timeline .timeline-box::before {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
}
.timeline .row.timeline-left .timeline-box::after,
.timeline .row.timeline-left .timeline-box::before {
  left: 100%;
}
.timeline .row.timeline-right .timeline-box::after,
.timeline .row.timeline-right .timeline-box::before {
  right: 100%;
}
.timeline .timeline-launch .timeline-box::after,
.timeline .timeline-launch .timeline-box::before {
  left: 50%;
  margin-left: -10px;
}
.timeline .timeline-box::after {
  top: 26px;
  border-color: transparent transparent transparent #ffffff;
  border-width: 10px;
}
.timeline .timeline-box::before {
  top: 25px;
  border-color: transparent transparent transparent #dddddd;
  border-width: 11px;
}
.timeline .row.timeline-right .timeline-box::after {
  border-color: transparent #ffffff transparent transparent;
}
.timeline .row.timeline-right .timeline-box::before {
  border-color: transparent #dddddd transparent transparent;
}
.timeline .timeline-launch .timeline-box::after {
  top: -20px;
  border-color: transparent transparent #dddddd transparent;
}
.timeline .timeline-launch .timeline-box::before {
  top: -19px;
  border-color: transparent transparent #ffffff transparent;
  border-width: 10px;
  z-index: 1;
}
.timeline .timeline-box .timeline-icon {
  position: relative;
  width: 40px;
  height: auto;
  float: left;
}
.timeline .timeline-icon i {
  font-size: 25px;
  /* color: #4F84C4; */
  color:#fba0e3;
}
.timeline .timeline-box .timeline-text {
  position: relative;
  width: calc(100% - 40px);
  float: left;
}
.timeline .timeline-launch .timeline-text {
  width: 100%;
}
.timeline .timeline-text h3 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 3px;
}
.timeline .timeline-text p {
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 0;
}
@media (max-width: 768px) {
  .timeline .timeline-continue::after {
    left: 40px;
  }
  .timeline .timeline-end,
  .timeline .timeline-start,
  .timeline .timeline-year,
  .timeline .row.timeline-left,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-right,
  .timeline .row.timeline-left .timeline-date,
  .timeline .timeline-launch {
    text-align: left;
  }
  .timeline .row.timeline-left .timeline-date::after,
  .timeline .row.timeline-right .timeline-date::after {
    left: 47px;
  }
  .timeline .timeline-box,
  .timeline .row.timeline-right .timeline-date,
  .timeline .row.timeline-left .timeline-date {
    margin-left: 55px;
  }
  .timeline .timeline-launch .timeline-box {
    margin-left: 0;
  }
  .timeline .row.timeline-left .timeline-box::after {
    left: -20px;
    border-color: transparent #ffffff transparent transparent;
  }
  .timeline .row.timeline-left .timeline-box::before {
    left: -22px;
    border-color: transparent #dddddd transparent transparent;
  }
  .timeline .timeline-launch .timeline-box::after,
  .timeline .timeline-launch .timeline-box::before {
    left: 30px;
    margin-left: 0;
  }
}

@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
    .bpokemon{
        background-image: url("966315.png");
        /* background-size: 100%; */
  background-repeat: no-repeat;
  background-position: center;
  height: 1000px;
    }
    
    
    .cardone {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  
  width: 320px;
  height: 446px;
  /* background-color: #FFD700; */
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  /* roatation */
  /* animation: holoCard 15s ease infinite; */
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
}
.cardone.redmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("charizard.jpg");

}

.cardone.ball {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("darkcharizard.png");

}

/* .cardone.ball {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("pokeball.png");

} */

.cardone.bluemask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("gengar.png");

}

.cardone.redball {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("redball.png");

}

.cardone.fullgoldmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url(".png");

}

.cardone.greenmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("greenball.png");

}
.cardone.yellowmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("yellow.png");

}
.cardone.cardverse {
  --color1: #ffdf35;
  --color2: #65f0ff;
  background-image: url("bookofpok.png");
}
.cardone.mew {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('gold.gif');
}
.cardone.black {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('black.gif');
}
.cardone.pink {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('pink.gif');
}
.cardone > span {
  position: relative;
  top: 45%;
}
.cardone:before,
.cardone:after {
  content: "";
  opacity: .1;
  mix-blend-mode: screen;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background-repeat: no-repeat;
}
.cardone:before {
  background-position: 50% 50%;
  background-size: 300% 300%;
  animation: holoGradient 15s ease infinite both;
  background-image: linear-gradient(
    115deg,
    transparent 0%,
    var(--color1) 30%,
    transparent 47.5%,
    transparent 52.5%,
    var(--color2) 70%,
    transparent 100%
  );
}
.cardone.cardverse:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExaDJuNGRkZzhycXN6MmJucnc3dXowdTdnbW9scHRxYmV3YmJ4OHQxdCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/U3qYN8S0j3bpK/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.redmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbzRoemdzdjVycTZrOWFkb245N3RkMnp1YTdzYXZyNGhtaXRscWp1dSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/rRmBOCZDJJGU0/giphy.gif");
  background-position: center;
  background-size: 259%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.ball:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbXl3czlwMzFmazhtM2o1bzU5bWN0cTFsb2h0amhqenJiMjM2M2VqdyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/RJy4FQlLbxDz4kJ6GF/giphy.gif");
  background-position: center;
  background-size: 260%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.bluemask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/CKlafeh1NAxz35KTq4/giphy-downsized-large.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.redball:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHBsM2d6Z2twamp4NGtsY2pienlkZmlseTlxMnpub2M5cjU1bzVueCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/l1IBk1o22jFjrWWIM/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.fullgoldmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/3o7aCXpnE2y0YCCoJa/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}


.cardone.greenmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/1aTUTJOn3aavLVC6G1/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone.yellowmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/GJnJcRCptdMRy/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.cardone.active {
  animation: none;
}
.cardone.active:before {
  opacity: 1;
  animation: none;
  transition: none;
  background-image: linear-gradient(
    115deg,
    transparent 30%,
    var(--color1) 48%,
    var(--color2) 53%,
    transparent 70%
  );
  filter: opacity(0.66);
  mix-blend-mode: screen;
}
.cardone.active:before,
.cardone.active:after {
  animation: none;  
}
.cardone.active:after {
  filter: brightness(2.5);
  mix-blend-mode: screen;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  width: 124px;
  height: 170px;
  box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  animation: none;
}
.demo .cardone:nth-of-type(1),
.demo .cardone:nth-of-type(2),
.demo .cardone:nth-of-type(3) {
  &:before, &:after {
    animation: none;
    opacity: 1;
  } 
}
.demo .cardone:nth-of-type(1) {
  &:before, &:after { display: none; }
}
.demo .cardone:nth-of-type(2) {
  background: none;
  &:before { display: none; }
}
.demo .cardone:nth-of-type(3) {
  background: none;
  &:before { background-position: center; }
  &:after { display: none; }
}
.operator {
  display: inline-block;
  vertical-align: middle;
  font-size: 45px;
}
@keyframes holoSparkle {
  0%, 5%, 100% { opacity: 0.2; background-position: 50% 50%; }
  33% { opacity: 1; background-position: 40% 40%; filter: brightness(2); }
  45% { opacity: 0.4; }
  66% { opacity: 1; background-position: 60% 60%; filter: brightness(2); }
}
@keyframes holoGradient {
  0%, 100% {
    opacity: 0.05;
    background-position: 50% 50%;
  }
  33% {
    background-position: 100% 100%;
    opacity: .66;
  }
  66% {
    background-position: 0% 0%;
    opacity: .66;
  }
}
@keyframes holoCard {
  0%, 100% {
    transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
  }
  33% {
    transform: rotateZ(-10deg) rotateX(20deg) rotateY(-12deg);
  }
  66% {
    transform: rotateZ(10deg) rotateX(-20deg) rotateY(12deg);
  }
}
.telegramimage{
    height: 45px !important;
    width:  40px !important;
}
.twitterimage{
    height: 45px !important;
    width:  40px !important;
}
.demo,
.cardsone { 
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 2000px;
  position: relative;
  z-index: 1;
  transform: translate3d(0.1px, 0.1px, 0.1px )
}
.cardsone .cardone {
  &:nth-child(2) {
    &, &:before, &:after {
      animation-delay: 0.2s;
    }
  }
  &:nth-child(3) {
    &, &:before, &:after {
      animation-delay: 0.4s;
    }
  }
}
@media(max-width:430px){
   .header{
      margin-top: 43px;
  
    }
}
    /* FAQ box */
    .question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}
.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}
.question-title.active h3:after{
    content: '-';
}
.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}
  
</style>



    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="cardone cardverse">

                    </div>
                    <h3 style="color:white; text-align:center; font-weight:bold;">Book Of Pokadex</h3>

                </div> <!-- end of div -->
               
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <svg class="frame-decoration" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 192.275"><defs><style>.cls-1{fill:#000000;}</style></defs><title>frame-decoration</title><path class="cls-1" d="M0,158.755s63.9,52.163,179.472,50.736c121.494-1.5,185.839-49.738,305.984-49.733,109.21,0,181.491,51.733,300.537,50.233,123.941-1.562,225.214-50.126,390.43-50.374,123.821-.185,353.982,58.374,458.976,56.373,217.907-4.153,284.6-57.236,284.6-57.236V351.03H0V158.755Z" transform="translate(0 -158.755)"/></svg>
    </header> <!-- end of header -->
    <!-- end of header -->


      

    <!-- Takeaways -->
    <div class="basic-1 " style="background-color:black">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cardone ball">

                    </div>

                </div>
                
                <div class="col-lg-6">
                    <h3 style="color:white"> Book Of Pokadex The Holy Grail </h3>
                    <ul style="line-height: 43px;">
                        <li style="font-size:20px; color:white;" >Book of Pokdex is launching on the BASE BlockChain, Presale holders will recieve the first ever Book of Pokadex NFT Card!</li> 
                        <li style="font-size:20px; color:white;"  >Community driven building an collection of Book of Pokadex NFT cards</li> 
                         <li style="font-size:20px; color:white;"  >Holders will be able to vote on Expansion NFT collections</li>
                    </ul>

                    <p></p>
                </div>
             
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of takeaways -->
    


    <!-- Takeaways -->
    <div class="basic-1 " style="background-color:black">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <div class="cardone redmask"> -->
                    <div class="cardone greenmask">

                    </div>

                </div>
<!-- 
                <div class="col-lg-6">
                    <h3 style="color:#fba0e3"> 7,777 Unique Inverse Meta Slayers</h3>
                    <ul style="line-height: 123px;">
                        <li> <p style="font-size:20px; color:white;" >The Inverse Meta collection consist of 7,777 generated slayers living on the Polygon network.</p> </li>
                        <li><p style="font-size:20px; color:white;"  >Each artwork is originally designed with over hundred different elements and various color palettes used to create the unique design.</p> </li>
                        <li> <p style="font-size:20px; color:white;"  >Inverse Meta NFT will be based on our digital card game characters!</p> </li>
                    </ul>

                    <p></p>
                </div> -->
                
                <div class="col-lg-6">
                    <h3 style="color:white"> Presale Information</h3>
                 
                    <ul>
                         <p style="line-height: 40px; color:white;" >BaseChain Presale Information</p> 
                         <p style="line-height: 40px; color:white;" >Send Etheruem to this wallet address</p> 
                        <p style="line-height: 40px; color:white;" >0x845018574e0B0C99e8Ee8058CcC205203eb73654</p> 
                         <p style="line-height: 40px; color:white;" >min: .1 ETH  </p> 
                        <p style="line-height: 40px; color:white;" >Max: 1 ETH</p> 
                        <p style="line-height: 40px; color:white;" >Once you send the Ethereum you will recieve your Tokens and NFT within the first 5 minutes</p> 




                    </ul>

                    <p></p>
                </div>
             
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of takeaways -->
<section style="background-color:black">
<div class ="container" style="background-color: black !important;">
      <div class="row">
        <div class="col-lg-12">
        <table class="table" style="background-color:black">
  <thead>
    <tr>
      <th scope="col" style="color:white;">Ethereum Amount</th>
      <th scope="col" style="color:white;">Book Of Pokadex Token Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="color:white;">.1 ETH</td>
      <td style="color:white;">5,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.2 ETH</td>
      <td style="color:white;">10,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.3 ETH</td>
      <td style="color:white;">15,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.4 ETH</td>
      <td style="color:white;">20,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.5 ETH</td>
      <td style="color:white;">25,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.6 ETH</td>
      <td style="color:white;">30,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.7 ETH</td>
      <td style="color:white;">35,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.8 ETH</td>
      <td style="color:white;">40,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">.9 ETH</td>
      <td style="color:white;">45,000,000</td>
    </tr>
    <tr>
      <td style="color:white;">1 ETH</td>
      <td style="color:white;">50,000,000</td>
    </tr>
  </tbody>
</table>

        </div>

      </div>

    </div>
</section>
   



    <!-- Testimonials -->
    <div class="slider-1" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                <h3 style="text-align:center; color:white;">Presale Holders Will recieve a random Book of Pokadex NFT sent To there opensea </h3>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="cardone redball">
                                    </div>

                                </div> <!-- end of swiper-slide -->
                                

                             
                              <!-- <div class="swiper-slide">
                                <div class="cardone greenball">
                                    </div>

                                </div>  -->
                                
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                <div class="cardone redmask">
                                    </div>

                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                <div class="cardone bluemask">

                                    </div>

                                    </div>     
                                    
                                    <div class="swiper-slide">
                                <div class="cardone greenmask">

                                    </div>
                                </div>   

                                <!-- <div class="swiper-slide">
                                <div class="cardone fullgoldmask">

                                    </div>
                                </div>    -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                              
        
                             
                              
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->


                  
      
    







   



    <section id="Merchant-help"  style="padding-bottom:100px; background:black; " >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="vouch-merchant-customerh2" style="text-align: center; padding-bottom:80px; font-size: 60px; color:white; ">FAQ</h2>

                    <div class="question-title">
                        <h3 style="color:white;">  What is Book Of Pokadex</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">
                                NFT collection of pokadex cards that holders will be airdropped weekly!
                            </p>
                            </div>

                        </div>

                    </div>

    

                    <div class="question-title">
                        <h3 style="color:white;">  Where can I buy?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">SushiSwap follow telegram for more information</p>
                            </div>

                        </div>

                    </div>


                  

                    <div class="question-title">
                        <h3 style="color:white;"> What is the presale wallet address?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;">0x845018574e0B0C99e8Ee8058CcC205203eb73654</p>
                            </div>

                        </div>

                    </div>


                    <div class="question-title">
                        <h3 style="color:white;"> Where can is the Telegram link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="https://t.me/bookofpokadex">Telegram</a> </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="color:white;"> where can i find the twitter link?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> <a href="https://twitter.com/bookofpokadex" target="_blank">Twitter</a> </p>
                            </div>

                        </div>

                    </div>
                


                    <div class="question-title">
                        <h3 style="color:white;"> Which BlockChain?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p style="color:black;"> BASE Network</p>
                            </div>

                        </div>

                    </div>
               

             

                
                    
                  
            </div>

        </div>
    </div>

</section>



@endsection

@section('javascripts')
<script  type="text/javascript">
$(document).ready(function(){
	$('.question-title h3').click(function(){
		$(this).next('.content-main').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content-main').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 7, 2021 02:00:00").getTime();

countDownDate.toLocaleString('en-US', { timeZone: 'America/New_York' });

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

@endsection