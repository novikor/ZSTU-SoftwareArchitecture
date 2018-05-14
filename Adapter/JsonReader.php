<?php
/**
 * Created by PhpStorm.
 * User: novikor
 * Date: 11.05.18
 * Time: 16:57
 */

class JsonReader implements JsonReaderInterface
{
    /**
     * @param string $sourceFile
     *
     * @return array
     */
    public function loadData(string $sourceFile): array
    {
        return json_decode(file_get_contents($sourceFile), true);
    }

}