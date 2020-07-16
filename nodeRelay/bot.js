require('dotenv').config();
const RathengarClient = require('./class/RathengarClient');
const token = process.env.DISCORD_BOT_TOKEN;
const client = new RathengarClient();

client.login(token);