<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.head')
<style>
.BoutItLogo {
    width:100%;
   background-image:url("IMG_6960.jpg");
   height: 250px;
   background-size:cover;
}


.left {
    float: left;
    width: 50%; }
.right {
    float: left;
    width: 50%;}
.author {
    padding: 15px;
    text-align: center;
    border-style: solid;}
.images {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;}
.bookdescription {
    text-align: center;
    border-style: solid;
    padding: 10px;}
.testimonies {
    padding: 5px;
    background-color: black;
    color: white;
    text-align: center;
    border-style: solid;
    border-color:}
.articles {
    padding: 4px;
    text-align: center;
}
.article1 {
    padding: 10px;
    border-style: solid;
    border-width: 2px;

}
.article2 {
    padding: 10px;
    border-style: solid;
    border-width: 2px;

}
.article3 {
    padding: 10px;
    border-style: solid;
    border-width: 2px;
}
.sponsor {
    padding: 10%;
    border-style: solid;
}
.announcements {
    padding: 10%;
    border-style: solid;
}
.nav navbar-nav {}
</style>
<body>
    <img src="https://i.imgur.com/3NoEmr9.jpg" alt="BoutItLogo" class = 'BoutItLogo'>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                 <a class="navbar-brand" href="/">diynovice.com</a>
                </div>
             <ul class="nav navbar-nav">
                <li class="active"><a href="#">Visit boutit.com</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Books & Resources</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Additional Site Resources<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/estimator">Renovation Estimator</a></li>
                            <li><a href="#">Account Information</a></li>
                            <li><a href="#">Other Feature Resources</a></li>
                        </ul>
                    </li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </nav>
   
    <div class = 'left'>
        <div class = 'author'> Books and Resources by: <b>Will G. Louden</b></div>
        <div class = 'images'>
            <img src='https://i.ibb.co/fxhjQcg/boutitbook.png' alt='boutitbookcover'>
            <img src='https://i.ibb.co/HDw13bJ/diybook.png' alt='diybookcover'>
        </div>
        <div class = 'bookdescription'> These two books diyNovice.com and BoutIt.com serve to be foundations for the future of loan and financial businesses. Possibility to add links that take the user directly to a more in-depth description of each book.</div>
        <br>
        <div class = 'testimonies'> <h3><b>Testimonies and Articles:</b></h3> </div>
        <div class = 'articles'>
            <div class = 'article1'> Online eMagazine article 1, with a teaser title and a brief write up of a review/testimony </div>
            <br>
            <div class = 'article2'> Online eMagazine article 2, with a teaser title and a brief write up of a review/testimony </div>
            <br>
            <div class = 'article3'> Online eMagazine article 3, with a teaser title and a brief write up of a review/testimony </div>
        </div>
    </div>
    
        <div class = 'right'>
        <div class = 'sponsor'> This box is reserved for Sponsor / Advertiser and/or Estimator Supplier banner ads / Promotions. </div>
        <br>
        <div class = 'announcements'> This box is reserved for site/network announcements and pormotions, and other information the company wants to notify the public about. </div>
    </div>

    
</body>
@extends('layouts.footer')
</html>
