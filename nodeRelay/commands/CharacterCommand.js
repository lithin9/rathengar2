require('dotenv').config();

const {Command} = require('discord-akairo');
const {MessageEmbed} = require("discord.js");
const CommandRelay = require('../class/CommandRelay');

class CharacterCommand extends Command {
	constructor() {
		super('character', {
			aliases: [
				'character',
				'char',
				'c']
		});
	}

	exec(message) {
		let embeddedMessage = new MessageEmbed;
		//console.log(message);
		CommandRelay.relayCommand("character", "args").then(function(result) {
			embeddedMessage.setDescription(result)
										 .setColor("#68c73f")
										 .setFooter(process.env.FOOTER_MESSAGE)
										 .setTimestamp();
			return message.reply(embeddedMessage);
		});
	}
}

module.exports = CharacterCommand;