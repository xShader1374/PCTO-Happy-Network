/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // remove
  collection.schema.removeField("xvfes4b2")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "z1pmnls8",
    "name": "categoria",
    "type": "relation",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "collectionId": "wlbayvnb3a9wxbs",
      "cascadeDelete": false,
      "minSelect": null,
      "maxSelect": 1,
      "displayFields": null
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "xvfes4b2",
    "name": "categoria",
    "type": "text",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "min": null,
      "max": null,
      "pattern": ""
    }
  }))

  // remove
  collection.schema.removeField("z1pmnls8")

  return dao.saveCollection(collection)
})
