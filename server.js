//import express from "express";
const express = require('express')
const app = express()
const sqlite3 = require('sqlite3').verbose()
const db = new sqlite3.Database('meensina.db')

app.get("/", (require, response) => {
    response.render('index.html')
})

//Configurar arquivos estáticos (css, scripts, imagens)
app.use(express.static(__dirname + '/public'));
app.use(express.urlencoded({extended:true}))
app.use(express.json())

//configuração do nunjucks
const nunjucks = require("nunjucks")
const { response } = require('express')
nunjucks.configure("views", { 
    express: app,
    noCache: true,
})

app.get("/", (require, response) => {
    return response.render('index.html')
})


app.get("/cadastrar", (require, response) => {
    db.run("CREATE TABLE IF NOT EXISTS cursos(ID  INTEGER PRIMARY KEY AUTOINCREMENT, NAME TEXT NOT NULL);");

    db.run(`INSERT INTO cursos(NAME) VALUES(?)`, ['Curso de Javascript'], function(err){
        if (err) {
            return console.log(err.message);
        }
        console.log(`A row has been inserted with rowid ${this.lastID}`);
      });
    response.render('register.html')
})

app.get("/cursos", (require, response) => {
    var crs = []
    let sql = `SELECT * FROM cursos ORDER BY name`;

    db.all(sql, [], (err, rows) => {
        if (err) {
            throw err;
        }

    rows.forEach((row) => {
        crs.push(row)
    });
    response.json(crs)
    });
})

app.delete("/cursos", (require, response) => {
    db.run(`DELETE FROM cursos WHERE NAME="C";`)
    response.send("Cursos deletados!")
})

app.get("/contato", (require, response) => {
    response.render('contact.html')
})

app.listen(3333)