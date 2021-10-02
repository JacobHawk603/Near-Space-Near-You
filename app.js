const express=require('express');
const app=express();
const engine = require('ejs-mate');
const path=require('path');
//const mysql = require('mysql');
//const socketio = require('socket.io');
const http = require('http');
const hostName= '127.0.0.1';
const port =8080;

const server = http.createServer((req, res) =>{

    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello world\n');
});

server.listen(port, hostName, ()=>{
	console.log('El servidor está preparado');
});