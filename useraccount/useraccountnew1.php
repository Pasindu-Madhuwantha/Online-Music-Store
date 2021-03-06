*{
  box-sizing:border-box;
}
body
{
   margin:0px;
   padding:0px;
   font:poppins;
   background-image: url("wp2326986-dark-music-wallpapers.jpg");
}

#main
{
width:100%;
height:50vh;
position:relative;;
}

nav{
 display:flex;
 justify-content:space-around;
 align-items: center;
 position: fixed;
 top:0;
 left:0;
 width:100%;
 background-color:#0e0e25;
 box-shadow: 5px 10px 30px rgba(0, 0, 0.02);
 z-index: 1;
}

.logo img{
  height:45px;
}
.menu{
  list-style: none;
  display: flex;
}
.menu li a{

height: 40px;
line-height: 43px;
margin: 3px;
padding: 0px 22px;
display: flex;
font-size: 0.8em;
text-transform: uppercase;
font-weight: 500;
letter-spacing: 1px;
color:gray;

}

a{
  text-decoration: none;
}


.Content{
  display: flex;
  width: 90%;
  justify-content: space-around;
  align-items: center;
  position: absolute;
  left: 50%;
  right:50%;
  transform: translate(-50%,-50%);
 border-top: center;
}

.main-text h1{
  font-size:3.5em;
  color: #1c3548;
  margin: 0px 0px 10px 0px;
  line-height: 60px;
}

.menu li a:hover{
  background-color: #1db096;
  color: white;
  box-shadow:5px 10px 30px rgba(24,139,119,0.2);
  transition: all ease 0.2s;
}
.logo{
  height: 40px;
  line-height: 43px;
  margin: 3px;
  padding: 0px 22px;
  display: flex;
  font-size: 0.8em;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
  color:gray;
  margin-right:500px;


}


.search {
  width: 100%;
  height: 150%;
  position: relative;
  display: flex;
  left: -40%;
}

.searchTerm {
  width: 100%;

  border: 3px solid black;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;

}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid black;
  background: black;
  text-align: center;
  color: black;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;

}

.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 45%;
  transform: translate(-50%, -50%);
}


.profile-nav, .profile-info{
    margin-top:30px;
    left:20%;
}

.profile-nav .user-heading {
    background:#0e0e25;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius:  40px 40px 40px 40px;
    padding: 30px;
    text-align:left;
    left:1%;
    top:46%;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 1250px;
    margin-top: -240px;
    position:absolute;


}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid #0d0d0d;
    display: inline-block;
    margin-left:3%

}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    object-fit: contain;
    margin-left:1%;margin-top:3%;

}


.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-left:5%;

}

.profile-nav .user-heading p {
    font-size: 12px;
    margin-left:9%;
}

.active{
color: white;

}



.profile-nav ul {
    margin-top: 1px;
    color:white;
}

.profile-nav ul > li {
    border-bottom: 1px solid black;
    margin-top: 10px;
    line-height: 30px;
    margin-right:90%;
    margin-left:

}

.profile-nav ul > li:last-child {

    border-bottom: 1px solid black;
}


.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: white;

}


.fa fa-user:hover{
  background-color: grey;
  color: white;
  box-shadow:5px 10px 30px rgba(24,139,119,0.2);
  transition: all ease 0.2s;
}
.profile-nav ul > li:hover{
  background-color: grey;
  color: white;
  box-shadow:5px 10px 30px rgba(24,139,119,0.2);
  transition: all ease 0.2s;
}
.profile-nav ul > li:last-child :hover{
  background-color:grey;
  color: white;
  box-shadow:5px 10px 30px rgba(24,139,119,0.2);
  transition: all ease 0.2s;
}



.bio-graph-heading {

    color: white;
    text-align: center;
    font-style: italic;
    padding: 40px 20px;
    border-radius: 40px 40px 40px 40px ;
    font-size: 20px;
    font-weight: 300;
    margin-top: -27.7%;
    margin-left:17%;
    margin-right:4%;
    background-image: url("wp2327016-dark-music-wallpapers.jpg");

}

.bio-graph-info {
    color:white;
    margin-top: 2.0%;
    margin-left:22%;
}
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}
.foot{

      text-align: center;
      font-style: italic;
      padding: 40px 10px;
      border-radius: 40px 40px 40px 40px ;
      font-size: 20px;
      font-weight: 300;
      margin-top: 5.9%;
      margin-left:5%;
      color:white;
  }

  table.center{
       margin-top: 0%;
  margin-left: 25%;

position: absolute;
  }

  table.center2{
       margin-top: -16%;
  margin-left: 60%;

position: absolute;
  }
  table.center3{
       margin-top: 0%;
  margin-left: 25%;

position: absolute;
  }

  table.center4{
       margin-top:-27%;
  margin-left: 60%;

position: absolute;
  }

 input[type=submit] {
  background-color: grey;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
