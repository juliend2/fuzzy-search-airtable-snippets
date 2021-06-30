# README

## Install

### 1. set a .htaccess with ENV Var for `AIRTABLE_API_KEY`

Like this:

```
<IfModule mod_env.c>
SetEnv AIRTABLE_API_KEY 'Get your key at https://airtable.com/account'
</IfModule>
```