// load the things we need
var express = require('express');
var app = express();


var execPHP = require('./execphp.js')();
execPHP.phpFolder = 'F:/xampp/htdocs/project/';


app.use('*.php',function(request,response,next) {
	execPHP.parseFile(request.originalUrl,function(phpResult) {
		response.write(phpResult);
		response.end();
	});
});

// set the view engine to ejs
app.set('view engine', 'ejs');

// use res.render to load up an ejs view file

// index page
app.get('/', function(req, res) {
    res.render('index');
});

// about page
app.get('/about', function(req, res) {
    res.render('about');
});
 
app.listen(8080);
console.log('80 is the magic port');