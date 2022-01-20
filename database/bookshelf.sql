-- Сущности:
--     `человек` (посол, чтец, администратор)
--     `книга`
--     `заявка`         (заявка на получение книги)
--     `списки`
--     `посольство`     (прописка книги,  больше одного)

-- `human`
--     - id 
--     - name
--     - access (user, admin)

-- `human_access`
--     - id
--     - human_id

-- `human_history`

-- `book`
--     - id
--     - name
--     - importance (required, recommended, optional)
--     - status (in transit, available, on bookshelf)

-- `book_history`

-- `application`
--     - id
--     - book id
--     - human id
--     - status    

-- `tracking`
--     - id 
--     - status    

-- `tracking_history`    

-- `application_tracking` 
--     - id 
--     - application id
--     - book id

-- `application_history`    

-- `book_list`
--     - id
--     - book id
--     - list id

-- `book_list_history`

-- `list`
--     - id
--     - type (stoplist, wishlist, buy-list - high priority, available, in transit, in-use)

-- `embassy`
--     - id
--     - name

-- `embassy_history`    

-- `book_embassy`
--     - id
--     - book id
--     - embassy

-- `book_embassy_history`



-- * addeted at
-- * created at
-- * updated at
-- * deleted at    
-- * activated at
-- * deactivated at

-- почти всё релейшены о истории и книгах это многие ко многим. less 15 mins. 