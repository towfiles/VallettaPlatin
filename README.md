Specification:
	
Back End:
https://github.com/towfiles/VallettaPlatin
•	Symphony 4.3
•	Php 7.1.3 --- 
•	phpUnit 7.5

Front End:
https://github.com/towfiles/valletta-platin-front
•	Vue CLI 3.9.2  -- this configures all the modules and plugins i.e. transpilers, SCSS pre-processors, hot reloading, Eslint, unit testing without using webpack or other bundlers https://cli.vuejs.org/guide/#cli
•	VueJS 2.6.10 – front end framework
•	axios 0.19.0 - httpclient
•	bootstrap 4.3.1 - html/css framework
•	bootstrap-vue 2.0.0-rc.27 – module which bind bootstrap with vue
•	Babel 6.4.1 – is used to transpile ECMAScript 2015+ into older versions of ECMAScript, therefore I can be used to transpile ES6 imports into older ECMAScript. This is required because VueJs uses ES6 imports
•	npm 6.4.1 – node pack manager



Description:
The System comprises of a frontend and backend. The backend is run by symfony which exposes a REST API on 127.0.0.1:8000 (unless you specify a different port). The backend is a vue.js app



How to Run:

•	Download or clone VallettaPlatin from github: https://github.com/towfiles/VallettaPlatin
•	Make sure you have PHP 7.1.3 and above installed then. In the root folder, run:  php -S 127.0.0.1:8000 -t public
•	Also confirm that port 8000 isn’t running by another application to avoid port conflict
•	Download or clone valletta-platin-front from github: https://github.com/towfiles/valletta-platin-front
•	Navigate to dist/index.html and open the html file in your browser.
•	Note that this is the compiled code of front end source code. To rebuild the compiled distribution run npm build in the valletta-platin-front root directory and make sure you have npm 6.4.1 and above installed


Things to Note:
cross site origin was allowed on symfony


