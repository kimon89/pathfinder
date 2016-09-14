<?php

use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use GuzzleHttp\Client;
use PHPUnit_Framework_Assert as PHPUnit;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    protected $client;
    protected $response;
    protected $data;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @BeforeSuite
     */
    public static function prepare($scope)
    {
        Artisan::call('migrate');
        Artisan::call('db:seed',['--class' => 'DatabaseTestSeeder']);
    }

    /**
     * @AfterSuite
     */
    public static function cleanup( $scope)
    {
        Artisan::call('migrate:rollback');
    }

    /**
     * @Given I  make a :arg1 request to :arg2
     */
    public function iMakeARequestTo($method, $url)
    {
        $this->response = $this->client->request($method, $url);
        $this->data = json_decode($this->response->getBody());
    }

    /**
     * @Then the response code should be :arg1
     */
    public function theResponseCodeShouldBe($statusCode)
    {
        PHPUnit::assertEquals($statusCode, $this->response->getStatusCode());
    }

    /**
     * @Then I should have a count of :arg1 hops
     */
    public function iShouldHaveACountOfHops($hops)
    {
        PHPUnit::assertEquals($hops, $this->data->hops);
    }

    /**
     * @Then I should see :arg1 as path
     */
    public function iShouldSeeAsPath($path)
    {
        PHPUnit::assertEquals($path, $this->data->pathStr);
    }
}
