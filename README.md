# ICObench Listing API
Private API for managing ICO listing on [ICObench](https://icobench.com)

Request your API keys by sending your email to info@icobench.com

## Getting Started

Currently available simple PHP Class to update ICO data - such as raised amount, token name, URLs, various descriptions, etc.

### Installing

Choose your favorite language

- [PHP Class](https://github.com/ICObench/listing-api/blob/master/ICObenchAPI.php)
- [Python Class](https://github.com/ICObench/listing-api)
- [Java Class](https://github.com/ICObench/listing-api)

### PHP Class usage example

First edit Public and Private keys in the class.
```php
private $privateKey = 'PRIVATE_KEY';
private $publicKey  = 'PUBLIC_KEY';
```
Then initialize the class and do the rest.
```php
$api = new ICObenchAPI('/general'); // Select API
$api->set('Platform','Waves');      // Column to update and its content - "Platform" in this example is set to "Waves"
$api->set('Token','BENCH');         // Set "Token" name to "BENCH"
	
// Update and fetch response
if(!$api->update()){ // Can also be $api->get() or $api->insert()
  echo $api->result;
}else{
  echo $api->result;
}
```

## Supported columns you can update
List of supported columns with valid examples and types.

### Types

- <b>TEXT</b> - Only &lt;b&gt;, &lt;i&gt; and &lt;br&gt; tags are allowed.

- <b>PLAIN</b> - No HTML tags are allowed.
  
- <b>URL</b> - Valid URL must be provided.
  
- <b>JSON</b> - Data must be provided in JSON format.
  
- <b>BOOL</b> - Only true and false or 1 and 0 are allowed.

- <b>DATE</b> - Date and time must be formated as YYYY-MM-DD HH:mm:ss.
  
### /general/update

<details><summary><b>About ICO</b> (<i>TEXT</i>)</summary>

#### PHP

```php 
$api->set('About','Our project is giving you total control over your ICO ...'); 
```

</details>

<details><summary><b>Accepting currencies</b> (<i>TEXT</i>)</summary>

#### PHP

```php
$api->set('Accepting','BTC, ETH, WAVES, Fiat');
```

</details>

<details><summary><b>Short intro about the ICO</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('DescIntro','ICO that will revolutionize how you find jobs and ...');
```

</details>

<details><summary><b>About milestones or roadmap</b> (<i>TEXT</i>)</summary>

#### PHP

```php
$api->set('DescMilestones','We are following our Roadmap by the dot and ...');
```

</details>

<details><summary><b>Short description</b>, 90 chars (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('DescShort','ICO is achieving what was never witnessed before and ...');
```

</details>

<details><summary><b>Team description</b> (<i>TEXT</i>)</summary>

#### PHP

```php
$api->set('DescTeam','Our team and advisors are experienced in sales & marketing, Blockchain, IT, and development ...');
```

</details>

<details><summary><b>Equity on offer</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('Equity','10%');
```

</details>

<details><summary><b>Hard Cap</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('HardCap','20,000 ETH');
```

</details>

<details><summary><b>Soft Cap</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('SoftCap','100 ETH');
```

</details>

<details><summary><b>BitcoinTalk thread</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkBitcointalk','https://bitcointalk.org/index.php?topic=5.0');
```

</details>

<details><summary><b>Facebook page</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkFacebook','https://www.facebook.com/ICObench');
```

</details>

<details><summary><b>Twitter profile</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkTwitter','https://www.twitter.com/ICObench');
```

</details>

<details><summary><b>Website</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkWww','https://icobench.com');
```

</details>       

<details><summary><b>Subreddit on Reddit</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkReddit','https://www.reddit.com/r/Wavesplatform/');
```  

</details>

<details><summary><b>GitHub</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkGitHub','https://github.com/ICObench');
```  

</details>

<details><summary><b>Medium blog</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkMedium','https://medium.com/@icobench');
```  

</details>	

<details><summary><b>Slack</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkSlack','https://wavesplatform.herokuapp.com/');
``` 

</details>

<details><summary><b>Telegram</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkTelegram','https://t.me/Cryptofriendschannel');
``` 

</details>			

<details><summary><b>VK</b> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('LinkVk','https://vk.com/wavesplatform');
``` 

</details>		
		
<details><summary><b>White paper</b>, <i>external</i> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('WhitePaper','http://cdn.mozilla.net/pdfjs/helloworld.pdf');
``` 

</details>		
		
<details><summary><b>YouTube (or Vimeo)</b>, <i>embedded links</i> (<i>URL</i>)</summary>

#### PHP

```php
$api->set('YouTubeVideo','https://www.youtube.com/embed/VIDEOIDsDSSJBl63ac');
```  

</details>

<details><summary><b>Milestones</b> (<i>JSON</i>)</summary>

#### PHP

```php
$api->set('Milestones','[["March 2016","Market research"],["March 2017","Our first premier establishment"],["August 2017","Launch of Token website"]]');
```  

</details> 

<details><summary><b>Minimum investment in ICO</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('MinimumInvestment','0.1 ETH');
```   

</details>

<details><summary><b>Platform</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('Platform','Ethereum');
```  

</details> 

<details><summary><b>Token type</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('TokenType','ERC20');
``` 

</details>	

<details><summary><b>Pre-ICO</b> (<i>BOOL</i>)</summary>

#### PHP

```php
$api->set('Pre',1);
```  

</details>

<details><summary><b>Pre-ICO start date</b> (<i>DATE</i>)</summary>

#### PHP

```php
$api->set('PreStart','2017-09-20 08:00:00');
```   

</details>         

<details><summary><b>Pre-ICO end date</b> (<i>DATE</i>)</summary>

#### PHP

```php
$api->set('PreStop','2017-10-21 08:00:00');
```   

</details> 							

<details><summary><b>ICO start date</b> (<i>DATE</i>)</summary>

#### PHP

```php
$api->set('Start','2017-10-25 08:00:00');
```   

</details>         

<details><summary><b>ICO end date</b> (<i>DATE</i>)</summary>

#### PHP

```php
$api->set('Stop','2017-12-05 08:00:00');
``` 

</details>

<details><summary><b>Token Price</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('Price','1 ETH = 100 BENCH');
```  

</details>							

<details><summary><b>Raised BTC</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('RaisedBtc','100.32352');
```  

</details>								

<details><summary><b>Raised DASH</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('RaisedDash','100.32352');
```  

</details>

<details><summary><b>Raised ETH</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('RaisedEth','100.32352');
```  

</details>

<details><summary><b>Raised LTC</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('RaisedLtc','100.32352');
```  

</details>

<details><summary><b>Raised WAVES</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('RaisedWaves','100.32352');
```  

</details>						

<details><summary><b>ICO short tagline</b>, 50 chars (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('Tagline','Decentralized market for jobs');
```  

</details>

<details><summary><b>Token name</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('Token','BENCH');
``` 

</details>					

<details><summary><b>Total number of token</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('TokensAll',10000000);
``` 

</details>							

<details><summary><b>Total number of sold tokens</b> (<i>NUM</i>)</summary>

#### PHP

```php
$api->set('TokensSold',10000000);
``` 

</details>		

<details><summary><b>Token trading on</b> (<i>PLAIN</i>)</summary>

#### PHP

```php
$api->set('TradingOn','Bitfinex;Bittrex;Bitstamp');
```  

</details>   

### /general/get

<details><summary><b>ICO rating</b></summary>

#### PHP

```php
$api->set('Rating');
$api->result; // JSON format
```  

</details> 

## Authors

View list of [contributors](https://github.com/ICObench/listing-api/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
