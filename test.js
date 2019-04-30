var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "a1i2n3o4t5n6a"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});
