<?php

/**
 * TypeHolderDefaultTest
 *
 * PHP version 7.1
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\TypeHolderDefault;

/**
 * TypeHolderDefaultTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\TypeHolderDefault
 */
class TypeHolderDefaultTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "TypeHolderDefault"
     */
    public function testTypeHolderDefault()
    {
        $testTypeHolderDefault = new TypeHolderDefault();
        $this->markTestIncomplete(
            'Test of "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "stringItem"
     */
    public function testPropertyStringItem()
    {
        $this->markTestIncomplete(
            'Test of "stringItem" property in "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "numberItem"
     */
    public function testPropertyNumberItem()
    {
        $this->markTestIncomplete(
            'Test of "numberItem" property in "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "integerItem"
     */
    public function testPropertyIntegerItem()
    {
        $this->markTestIncomplete(
            'Test of "integerItem" property in "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "boolItem"
     */
    public function testPropertyBoolItem()
    {
        $this->markTestIncomplete(
            'Test of "boolItem" property in "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "arrayItem"
     */
    public function testPropertyArrayItem()
    {
        $this->markTestIncomplete(
            'Test of "arrayItem" property in "TypeHolderDefault" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = TypeHolderDefault::getOpenApiSchema();
        $schemaArr = TypeHolderDefault::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}