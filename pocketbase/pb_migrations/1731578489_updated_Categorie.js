/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("wlbayvnb3a9wxbs")

  // add
  collection.schema.addField(new SchemaField({
    "system": false,
    "id": "5zc5h9ya",
    "name": "media",
    "type": "relation",
    "required": false,
    "presentable": false,
    "unique": false,
    "options": {
      "collectionId": "ozwdlg8re5zcssq",
      "cascadeDelete": false,
      "minSelect": null,
      "maxSelect": null,
      "displayFields": null
    }
  }))

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("wlbayvnb3a9wxbs")

  // remove
  collection.schema.removeField("5zc5h9ya")

  return dao.saveCollection(collection)
})
