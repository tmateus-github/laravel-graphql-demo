## Project
Laravel framework with GraphQL integration.

## Usage example

Query variables:
```javascript
{
  products {
    name,
    description,
    country
  }
}
```
Output response:
```javascript
{
  "data": {
    "products": [
      {
        "name": "Product A",
        "description": "Description of Product A",
        "country": "Portugal"
      },
      {
        "name": "Product B",
        "description": "Description of Product B",
        "country": "Spain"
      },
      {
        "name": "Product C",
        "description": "Description of Product C",
        "country": "France"
      },
      {
        "name": "Product D",
        "description": "Description of Product D",
        "country": "Italy"
      }
    ]
  }
}
```

Query variables:
```javascript
{
  product(id: 1) {
    name,
    description,
    country
  }
}
```

Output response:
```javascript
{
  "data": {
    "product": {
      "name": "Product A",
      "description": "Description of Product A",
      "country": "Portugal"
    }
  }
}
```

##Testing API
Either you can user [postman](https://www.postman.com/) or [electronjs](https://www.electronjs.org/apps/graphiql).
