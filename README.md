## Laravel Broadcasting With Echo In Under 5 Minutes
This repository is a scaffold for Laravel Broadcasting, use this starter repository to get started quickly with Laravel broadcasting. 

## Setup
Clone the repository
```
git clone https://github.com/piesocket/laravel-broadcasting-starter.git
```

Create .env file
```
cp .env.example .env
```

Get your API keys from [PieSocket](https://www.piesocket.com) and configure in the `.env` file.
```
PIESOCKET_API_KEY=
PIESOCKET_API_SECRET=
PIESOCKET_CLUSTER_ID=
PIESOCKET_FORCE_AUTH=false 

MIX_PIESOCKET_API_KEY="${PIESOCKET_API_KEY}"
MIX_PIESOCKET_CLUSTER_ID="${PIESOCKET_CLUSTER_ID}"
```

Install Composer Depedencies
```
composer install
```

Install Node Dependencies
```
npm install
```

Compile Javascript Code
```
npm run dev
```

If you run into issues with the above command, try to re-compile Laravel Echo
```
cd node_modules/laravel-echo && npm i
```

Generate application key and start Laravel Server
```
php artisan serve
```

## Testing 
We have created an artisan script for you to test the integration.

Open `http://localhost:8000` in your browser.

From your terminal, run
```
php artisan dispatch:neworder
```

You should see an alert in your browser with published event data.

Refer to the  [this tutorial]((https://www.piesocket.com/blog/laravel-echo-broadcasting/)) to learn more.

## Example code
We have written an easy to follow guide on how to use Laravel Broadcasting to create real-time experiences.

Read here: [Laravel Broadcasting with Echo](https://www.piesocket.com/blog/laravel-echo-broadcasting/)

## Laravel
We keep this repository updated wit the Latest Laravel Version.