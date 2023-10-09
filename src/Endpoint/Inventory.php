<?php

namespace Onetoweb\Ebay\Endpoint;

/**
 * Inventory Endpoint
 */
class Inventory extends EndpointAbstract
{
    /**
     * Base path
     */
    public const BASE_PATH = '/sell/inventory/v1';
    
    /**
     * @param array $query = []
     * 
     * @return array
     */
    public function list(array $query = []): array
    {
        return $this->client->request($this->client::METHOD_GET, self::BASE_PATH . '/inventory_item', $query);
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function bulkCreateOrReplace(array $data): array
    {
        return $this->client->request($this->client::METHOD_POST, self::BASE_PATH . '/bulk_create_or_replace_inventory_item', [], $data);
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    public function bulkGetItems(array $data): array
    {
        return $this->client->request($this->client::METHOD_POST, self::BASE_PATH . '/bulk_get_inventory_item', [], $data);
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function bulkUpdatePriceQuantity(array $data): array
    {
        return $this->client->request($this->client::METHOD_POST, self::BASE_PATH . '/bulk_update_price_quantity', [], $data);
    }
    
    /**
     * @param string $sku
     * 
     * @return array
     */
    public function get(string $sku): array
    {
        return $this->client->request($this->client::METHOD_GET, self::BASE_PATH . "/inventory_item/$sku");
    }
    
    /**
     * @param string $sku
     *
     * @return array
     */
    public function delete(string $sku)
    {
        return $this->client->request($this->client::METHOD_DELETE, self::BASE_PATH . "/inventory_item/$sku");
    }
    
    /**
     * @param array $data
     * 
     * @return array
     */
    public function replaceOrCreate(string $sku, array $data)
    {
        return $this->client->request($this->client::METHOD_PUT, self::BASE_PATH . "/inventory_item/$sku", [], $data);
    }
    
    /**
     * @param array $data
     *
     * @return array
     */
    public function productCompatibility(string $sku, array $data)
    {
        return $this->client->request($this->client::METHOD_PUT, self::BASE_PATH . "/inventory_item/$sku/product_compatibility", [], $data);
    }
    
    
}