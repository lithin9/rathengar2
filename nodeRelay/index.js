require('dotenv').config();

const Discord = require('discord.js');
const client = new Discord.Client();
const token = process.env.DISCORD_BOT_TOKEN;

client.on('ready', () => {
	console.log('This bot is online!');
});

client.on('message', msg => {
	if (msg.content === 'What\'s up?') {
		msg.reply('Wow I\'m alive!');
	}
});

client.login(token);