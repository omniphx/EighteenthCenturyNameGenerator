# -*- coding: utf-8 -*-
import scrapy
from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.contrib.linkextractors import LinkExtractor

from name_crawler.items import SurnameItem

DOMAIN = 'surnames.behindthename.com'
URL = 'http://%s' % DOMAIN

class SurnameSpiderSpider(CrawlSpider):
    name = "surname_spider"
    allowed_domains = [DOMAIN]
    start_urls = (
        'http://surnames.behindthename.com/names/usage/english',
    )

    rules = [Rule(LinkExtractor(allow=('/names/usage/english/[0-9]*','/names/usage/english')), callback='parse_item')]

    def parse_item(self, response):
        for sel in response.xpath('//div[@class="browsename"]'):
            item = SurnameItem()
            item['surname'] = sel.xpath('b/a/text()').extract()[0].title()
            yield item