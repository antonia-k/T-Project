//var mysql = require('mysql');

var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  port: "3306",
  password: "",
  database: "trolltweets"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

con.query('SELECT tweets.external_author_id As sol1, tweets.author AS sol FROM trolltweets.tweets limit 5', function (error, results, fields) {
  if (error) throw error;
  console.log('The solution is: ', results[1].sol);
  console.log('The solution is: ', results[1].sol1);
  //maybe create a for loop that prints all the results with 10 as the limit bc that is our limit, but that is undynamic, how do I print all the results
var i;
var queryresults=[];
console.log(queryresults);
for (i=0; i< 5; i++){
queryresults.push(results[i].sol);
}
  console.log(queryresults);

  console.log(queryresults[1]);
});

con.end();
