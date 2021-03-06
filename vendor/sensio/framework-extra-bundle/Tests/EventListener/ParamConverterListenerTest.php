<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener;
use Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener\Fixture\FooControllerNullableParameter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class ParamConverterListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getControllerWithNoArgsFixtures
     */
    public function testRequestIsSkipped($controllerCallable)
    {
        $kernel = $this->getMockBuilder('Symfony\Component\HttpKernel\HttpKernelInterface')->getMock();
        $request = new Request();

        $listener = new ParamConverterListener($this->getParamConverterManager($request, array()));
        $event = new FilterControllerEvent($kernel, $controllerCallable, $request, null);

        $listener->onKernelController($event);
    }

    public function getControllerWithNoArgsFixtures()
    {
        return array(
            array(array(new TestController(), 'noArgAction')),
            array(new InvokableNoArgController()),
        );
    }

    /**
     * @dataProvider getControllerWithArgsFixtures
     */
    public function testAutoConvert($controllerCallable)
    {
        $kernel = $this->getMockBuilder('Symfony\Component\HttpKernel\HttpKernelInterface')->getMock();
        $request = new Request(array(), array(), array('date' => '2014-03-14 09:00:00'));

        $converter = new ParamConverter(array('name' => 'date', 'class' => 'DateTime'));

        $listener = new ParamConverterListener($this->getParamConverterManager($request, array('date' => $converter)));
        $event = new FilterControllerEvent($kernel, $controllerCallable, $request, null);

        $listener->onKernelController($event);
    }

    /**
     * @dataProvider settingOptionalParamProvider
     * @requires PHP 7.1
     */
    public function testSettingOptionalParam($function, $isOptional)
    {
        $kernel = $this->getMockBuilder('Symfony\Component\HttpKernel\HttpKernelInterface')->getMock();
        $request = new Request();

        $converter = new ParamConverter(array('name' => 'param', 'class' => 'DateTime'));
        $converter->setIsOptional($isOptional);

        $listener = new ParamConverterListener($this->getParamConverterManager($request, array('param' => $converter)), true);
        $event = new FilterControllerEvent(
            $kernel,
            array(
                new FooControllerNullableParameter(),
                $function,
            ),
            $request,
            null
        );

        $listener->onKernelController($event);
    }

    public function settingOptionalParamProvider()
    {
        return array(
            array('requiredParamAction', false),
            array('defaultParamAction', true),
            array('nullableParamAction', true),
        );
    }

    /**
     * @dataProvider getControllerWithArgsFixtures
     */
    public function testNoAutoConvert($controllerCallable)
    {
        $kernel = $this->getMockBuilder('Symfony\Component\HttpKernel\HttpKernelInterface')->getMock();
        $request = new Request(array(), array(), array('date' => '2014-03-14 09:00:00'));

        $listener = new ParamConverterListener($this->getParamConverterManager($request, array()), false);
        $event = new FilterControllerEvent($kernel, $controllerCallable, $request, null);

        $listener->onKernelController($event);
    }

    public function getControllerWithArgsFixtures()
    {
        return array(
            array(array(new TestController(), 'dateAction')),
            array(new InvokableController()),
        );
    }

    protected function getParamConverterManager(Request $request, $configurations)
    {
        $manager = $this->getMockBuilder('Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager')->getMock();
        $manager
            ->expects($this->once())
            ->method('apply')
            ->with($this->equalTo($request), $this->equalTo($configurations))
        ;

        return $manager;
    }
}

class TestController
{
    public function noArgAction(Request $request)
    {
    }

    public function dateAction(\DateTime $date)
    {
    }
}

class InvokableNoArgController
{
    public function __invoke(Request $request)
    {
    }
}

class InvokableController
{
    public function __invoke(\DateTime $date)
    {
    }
}
