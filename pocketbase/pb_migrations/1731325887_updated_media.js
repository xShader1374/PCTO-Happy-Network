/// <reference path="../pb_data/types.d.ts" />
migrate((db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  collection.name = "Media"

  return dao.saveCollection(collection)
}, (db) => {
  const dao = new Dao(db)
  const collection = dao.findCollectionByNameOrId("ozwdlg8re5zcssq")

  collection.name = "media"

  return dao.saveCollection(collection)
})
