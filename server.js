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
    db.serialize(function() {
        db.run(`CREATE TABLE IF NOT EXISTS cursos(id int AUTO_INCREMENT PRIMARY KET, Nome varchar(60) NOT NULL)`)
    })

    const query = `
        INSERT INTO cursos(
            Nome
        ) VALUES (?);
        `
        
     const values = [
        "Curso de Javascript"  
    ]

    db.run (query, values)
    
    response.render('register.html')
})

app.get("/cursos", (require, response) => {
    db.all(`SELECT * FROM cursos`)
    
    response.render('courses.html')
})

app.get("/contato", (require, response) => {
    response.render('contact.html')
})

app.listen(3333)