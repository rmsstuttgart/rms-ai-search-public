CREATE TABLE tt_content (
    aisearch_url_hash VARCHAR(255) DEFAULT '' NOT NULL,
    aisearch_api_host VARCHAR(255) DEFAULT 'https://chat.rm-solutions.de' NOT NULL,
    aisearch_prompt_template VARCHAR(255) DEFAULT 'ai_search' NOT NULL,
    aisearch_list_all_sources TINYINT(3) DEFAULT 0 NOT NULL,
    aisearch_autofocus_search_field TINYINT(3) DEFAULT 1 NOT NULL
);
