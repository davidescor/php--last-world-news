![last-world-news](http://davidespier.com/img/appweb/lwn.jpg)

# last-world-news

Website where you can find the latest news, there are 9 countries available in their respective languages.
Available countries: CO, DE, FR, IT, MX, PT, RO, RU and US.

## Requirements

- Register to [newsapi.org](https://newsapi.org/).
- Php 5.6+.


## Installation

1. Register on the page of [newsapi.org](https://newsapi.org/) to obtain the apikey.

2. Edit config in 'core/config.php and paste apikey.

```bash
  $category = 'general';
  $news =  '19';
  $apikey = '*******************';
  $lang = 'us';
  $country = 'us';
```

       2.1 - Explanation:

             $category -> Categories displayed in 'index.php'.

                          Available 'business, entertaiment, general, health, science, sports, technology'.

             $news ->     News displayed in 'index.php' | Max 19 notice | Array 0 to 19 = 20 | 1 line = 4 notices.

             $apikey ->   Add apikey /v2. https://newsapi.org/

             $lang ->     Language available: co, de, fr, it, mx, pt, ro, ru and us.

             $country ->  Country available: co, de, fr, it, mx, pt, ro, ru and us.
                     

3. Run.

## Website project

[http://davidespier.com/pages/lastworldnews/](http://davidespier.com/pages/lastworldnews/)


## Authors

 *Developed and designed by*  **David Espier**


[Personal website](https://davidespier.com)

[Alexa skills](https://www.amazon.es/s?k=davidespier&i=alexa-skills)
        
[Other projects](https://github.com/davidespier?tab=repositories)



## License


[MIT License](https://choosealicense.com/licenses/mit/) © davidespier.com
