const {AkairoClient, CommandHandler, ListenerHandler} = require('discord-akairo');

class RathengarClient extends AkairoClient {
	constructor() {
		super({
						// Options for Akairo go here.
					}, {
						// Options for discord.js goes here.
					});
		this.commandHandler = new CommandHandler(this, {
			directory: './commands/', prefix: '?r' // or ['?', '!']
		});

		this.listenerHandler = new ListenerHandler(this, {
			directory: './listeners/'
		});
		this.commandHandler.useListenerHandler(this.listenerHandler);
		this.listenerHandler.loadAll();
		this.commandHandler.loadAll();
	}
}

module.exports = RathengarClient;