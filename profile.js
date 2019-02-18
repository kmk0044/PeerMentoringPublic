var http = require('http');

// vvv CONFIG HEADER vvv
const mysql = require('mysql'); 
const fs = require('fs');

var config = require("./config");
const connection = mysql.createConnection({
	host: config.databaseOptions.host,port: config.databaseOptions.port,user: config.databaseOptions.user,
	password: config.databaseOptions.password,ssl: config.databaseOptions.ssl
});
// ^^^ CONFIG HEADER ^^^



app.get('/test', function(request, response) {
	connection.query(queryString, function(err, rows, fields) {
    	if (err) throw err;
 		console.log('Connected to database.');
	});

	connection.query('SELECT * FROM Users', function(err, rows, fields) {
    	if (err) throw err;
    	console.log(rows);
	});

	response.send('Hi!');
});

/*var queryString = 'USE PeerMentoring';
 
connection.query(queryString, function(err, rows, fields) {
    if (err) throw err;
 	console.log('Connected to database.');
});

var users = connection.query('SELECT * FROM Users', function(err, rows, fields) {
    if (err) throw err;
    console.log(rows);
});*/

