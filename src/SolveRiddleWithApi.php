<?php
require_once __DIR__ . '/../vendor/autoload.php';


/**
 * 
 * Solves the riddle using the blocks gotten from the api,
 * performs an Api call to compare elements
 * 
 * @author  guerreroglez@gmail.com
 */


$token = '899d7911-ad53-4d71-855c-5d17a2665da7';
$shuffledBlocks = array("M20WPJUpqdmWwQNFYcyp4RqkMMA6eEfL7aG6JB8lBq7HWQduzKbFu2O5XbQw2wjzad8pgxjEt4SX0WSbVV2JiBcOsbASnhd5i9qa", 
                "IVhP49lBcL6SmWIQVbQOV7Lx64swBomuf2fK9X4cuxr6VKRSjZT6sZEPIhoDWwITYc7ZX3izBJIrVNDoQ6nq0JP1Clui3EUaMQCX", 
                "n6zOJQm71d4f4oV33PivPKHcFmE2kUc1gcbiyy6v9ZoGOQrIIFSdBhjOnpyVIPnbWgL1WvvGMZC4voAGzh2SMoaVCGYy1BaRNZug", 
                "3HMZQLAaCQAeFKz4y5R17TlOAbv6hHWCeV2iuCbwnPbtxusQD6624KeGIoL2a65spw56KOzQotWCSnFXrHQY4CXmjJFJtlDCtImM", 
                "5anBUEmPbFIVfnwXdIOkoA85sEM6lIm4w8ok7otqKYBk3aGMoFnLET6bYfyoqka6KfLsmu28OkWCuNPPevDgI0FMRTqzqOu3zSay", 
                "5LG6XorUuIS1YsgnISgPfL0fJTvqtTULUQbpiTmUl3s7ElJ2rqZOyXPVYtTupMNVBdkrm08CXBo4aSj8MjFp0gGp9w6FxdL7azji", 
                "rrsx8U8yOAyFXi840NW6SCDbcn7PITvbVrEukwSkLzJFx8N3Q8v4LBL8ufDGzVf0E8wzF1pE0PdQLh44mksX1B5wxuVsk8W0isNY", 
                "F0iSLwZh3ZaehnVUzCStXQYefqzpzFxcpI6WWzienl2tH4wjnjzpI3UQvixquzfkvJcgnaytnjvt7KR1DsaqDXJQWCLgOP9E2hKA", 
                "KNf6w3DZnK65HxFOkJeY7TENXsPReTslAGvNtmVS4IpZ8baT29vLDUWr1vhRXi9FCkSsHKRy6t2U9ypTOA6kZkIMmwu0f8BLw74J" 
            );


$comparatorApi = new ComparatorApi;
$roofTopSort = new RoofTopSort( $comparatorApi );

$sortedBlocks = $roofTopSort->check($shuffledBlocks, $token);

echo join('', $sortedBlocks);

?>