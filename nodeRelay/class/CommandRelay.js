require('dotenv').config();

const axios = require('axios').default;

class CommandRelay {
	static async relayCommand (command, args) {
		let relayURL = process.env.RELAY_URL;
		//Send request to server
		const result = await axios.get(process.env.RELAY_URL + '/' + command);
		console.log(result.data);

		return result.data;
	}
}

module.exports = CommandRelay;