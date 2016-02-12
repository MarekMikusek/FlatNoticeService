<?php

namespace Notice\Controller;

use Notice\Model\SalesUnit;
use Zend\Filter\Compress;
use Zend\Form\Element\Date;
use Zend\Form\Element\DateTime;
use Zend\Form\Form;
use Zend\View\Model\ViewModel;
use Zend\Hydrator;

class NoticeController extends AbstractNoticeController
{
    private $entityName = 'Notice';
    private $controllerName = 'notice';

    public function insertExtraMasks()
    {
        
    }
    
    public function insertFlatDetailsOtodom($salesUnit)
    {
        $return=
        "<FlatDetails>\r\n".
            $this->writeLn('BuildingType',$salesUnit->getType()->getNameOtodom())."\r\n".
            $this->writeLn('BuildinMaterial',$salesUnit->getSite()->getBildingMaterial()->getNameOtodom())."\r\n".
            $this->writeLn('BuildingOwnership',$salesUnit->getSite()->get)."\r\n".
            $this->writeLn('FloorNo',$salesUnit->getFloor())."\r\n".
 //           $this->writeLn('ExtrasMask')."\r\n".
//            $this->writeLn('',$salesUnit->)."\r\n".
//            $this->writeLn('',$salesUnit->)."\r\n".
        "<\FlatDetails>\r\n";

        return $return;
    }

    public function insertHouseDetailsOtodom($salesUnit)
    {

    }

    public function insertCommercialPropertyDetails($salesUnit)
    {

    }
    public function prepareOneOfferForOtodomAction(SalesUnit $salesUnit)
    {
        $offerContent =
            "<Insertion>\r\n".
            $this->writeLn('ID',$salesUnit->getOfferNumber())."\r\n".
            $this->writeLn('Action',0)."\r\n".
            $this->writeLn('Country',$salesUnit->getSite()->getCountry()->getOtodom())."\r\n".
            $this->writeLn('Province',$salesUnit->getSite()->getProvince()->getOtodom())."\r\n".
            $this->writeLn('City',$salesUnit->getSite()->getCity())."\r\n".
            $this->writeLn('Quarter',$salesUnit->getSite()->getQuarter())."\r\n".
            $this->writeLn('Street',$salesUnit->getSite()->getStreet())."\r\n".
            $this->writeLn('Price',$salesUnit->getPrice())."\r\n".
            $this->writeLn('PriceCurrency',1)."\r\n".
            $this->writeLn('Area',$salesUnit->getArea())."\r\n".
            $this->writeLn('MarketType',0)."\r\n".
            $this->writeLn('ObjectName',$salesUnit->getType()->getNameOtodom())."\r\n".
            $this->writeLn('OfferType',0)."\r\n".
            $this->writeLn('Agent',$salesUnit->getUser()->getLicence())."\r\n";
            switch ($salesUnit->getType()->getName()){
                case 'mieszkanie':
                    $this->insertFlatDetailsOtodom($salesUnit);
                    break;
                case 'dom':
                    $this->insertHouseDetailsOtodom($salesUnit);
                    break;
                case 'lokal użytkowy':
                    $this->insertCommercialPropertyDetails($salesUnit);
                    break;
            };


//            $this->writeLn('',$salesUnit->)."\r\n".
//            $this->writeLn('',$salesUnit->)."\r\n".
//            $this->writeLn('',$salesUnit->)."\r\n".
//            $this->writeLn('',$salesUnit->)."\r\n".
//
//            "</Insertion>"


        return $offerContent;
    }

    public function prepareWholeFileForOtodom()
    {
        $unitsToAdd = $this->getRepository("Notice\\Model\\SalesUnit")->findBy(['isNew' => true]);
        $fileContent = '<?xml version="1.0" encoding="utf-8" ?>
            <otoDom>
                <Agency>marek@thtg.pl</Agency>
                <Date>' . $this->getCurrentDate() . '</Date>
                <ImportType>full</ImportType>
                <Insertions>';
                    $fileContent .= '';
                    foreach ($unitsToAdd as $unit) {
                        $fileContent .= $this->prepareOneOfferForOtodom($unit);
                    }
                    $fileContent .= '</Insertion>\r\n
                </Insertions>\r\n
            </otoDom>';
        var_dump($fileContent);
        die();
    }

    public function sendToOtodom($testData)
    {

        $testData = '<?xml version="1.0" encoding="utf-8" ?>
<otoDom>
    <Agency>nazwa@biura.pl</Agency>
    <Date>2015-01-29</Date>
    <ImportType>full</ImportType>
    <Insertions>
        <!-- oferty do aktualizacji -->
        <Insertion>
            <ID>422</ID>
            <Action>0</Action>
            <Country>1</Country>
            <province>5</province>
            <District>142</District>
            <City>Poznań</City>
            <Quarter>Grunwald</Quarter>
            <Street>Smardzewska</Street>
            <Price>300000</Price>
            <PriceType>0</PriceType>
            <PriceCurrency>1</PriceCurrency>
            <Area>44</Area>
            <MarketType>1</MarketType>
            <ObjectName>2</ObjectName>
            <OfferType>0</OfferType>
            <AgentLicense>12345</AgentLicense>
            <Description>Mieszkanie na sprzedaż</Description>
            <TerrainDetails>
                <type>1</type>
                <Dimensions>200x300</Dimensions>
                <MediaMask>
                    <value>1</value>
                    <value>5</value>
                </MediaMask>
                <AccessMask>
                    <value>0</value>
                    <value>2</value>
                </AccessMask>
                <Fence>1</Fence>
                <VicinityMask>
                    <value>1</value>
                    <value>2</value>
                </VicinityMask>
            </TerrainDetails>
            <ContactInfo>
                <Name>Marek Mikusek</Name>
                <Phone>600075041</Phone>
                <Email>marek@thtg.pl</Email>
            </ContactInfo>
        </Insertion>
//        <Insertion>
//            <ID>245</ID>
//            <Action>0</Action>
//            <Country>1</Country>
//            <province>5</province>
//            <District>Łódź</District>
//            <City>Łódź</City>
//            © Otodom 2016 8/29
//            <Street>Półwiejska</Street>
//            <Price>150000</Price>
//            <PriceType>0</PriceType>
//            <PriceCurrency>1</PriceCurrency>
//            <Area>3 400,563</Area>
//            <MarketType>1</MarketType>
//            <ObjectName>1</ObjectName>
//            <OfferType>0</OfferType>
//            <Description>Sprzedam Dom...</Description>
//            <HouseDetails>
//                <building-type>1</building-type>
//                <TerrainArea>3400</TerrainArea>
//                <ConstructionStatus>0</ConstructionStatus>
//                <BuildYear>2000</BuildYear>
//                <RoofType>2</RoofType>
//                <type>0</type>
//                <FloorsNum>0</FloorsNum>
//                <RoomsNum>2</RoomsNum>
//                <GarretType>2</GarretType>
//                <WindowsType>2</WindowsType>
//                <MediaMask>
//                    <value>0</value>
//                    <value>4</value>
//                </MediaMask>
//                <HeatingMask>
//                    <value>1</value>
//                    <value>7</value>
//                    <value>3</value>
//                </HeatingMask>
//                <FenceMask>
//                    <value>2</value>
//                    <value>4</value>
//                    <value>5</value>
//                </FenceMask>
//                <Location>2</Location>
//                <ExtrasMask>
//                    <value>0</value>
//                    <value>2</value>
//                    <value>4</value>
//                    <value>5</value>
//                </ExtrasMask>
//            </HouseDetails>
//        </Insertion>
        <Insertion>
            <ID>128</ID>
            <Action>0</Action>
            <Country>1</Country>
            <province>16</province>
            <District>358</District>
            <City>Kołobrzeg</City>
            <Quarter>Starówka</Quarter>
            <Street>Dubois</Street>
            <Price>150000</Price>
            <PriceType>0</PriceType>
            <PriceCurrency>1</PriceCurrency>
            <Area>155,90</Area>
            <MarketType>1</MarketType>
            <ObjectName>4</ObjectName>
            <OfferType>0</OfferType>
            <Description>
                Dwupoziomowy lokal zlokalizowany w centrum miasta z dogodnym
                dojściem i dojazdem.
            </Description>
            <CommercialPropertyDetails>
                <PropertyUseMask>
                    <value>0</value>
                    <value>2</value>
                    <value>3</value>
                </PropertyUseMask>
                <ExtrasMask>
                    <value>0</value>
                    <value>1</value>
                </ExtrasMask>
                <Floor>1</Floor>
            </CommercialPropertyDetails>
            <Photos>
                <Photo>
                    <Position>2</Position>
                    <File>1.jpg</File>
                </Photo>
                <Photo>
                    <File>4.jpg</File>
                </Photo>
                <Photo>
                    <File>3.jpg</File>
                </Photo>
                <Photo>
                    <Position>1</Position>
                    <File>2.jpg</File>
                </Photo>
            </Photos>
        </Insertion>
        <Insertion>
            <ID>255</ID>
            <Action>0</Action>
            <Country>1</Country>
            <province>5</province>
            <District>142</District>
            <City>Łódź</City>
            <Quarter>Górna</Quarter>
            <Street>Łukowa</Street>
            <Price>1600</Price>
            <PriceType>0</PriceType>
            <PriceCurrency>1</PriceCurrency>
            <Area>47</Area>
            <MarketType>1</MarketType>
            <ObjectName>0</ObjectName>
            <OfferType>1</OfferType>
            <Description>Nowe mieszkanie w zamkniętym osiedlu.</Description>
            <FlatDetails>
                <building-type>0</building-type>
                <BuildingFloorsNum>0</BuildingFloorsNum>
                <BuildingOwnership>2</BuildingOwnership>
                <FloorNo>1</FloorNo>
                <RoomsNum>1</RoomsNum>
                <ExtrasMask>
                    <value>0</value>
                    <value>3</value>
                </ExtrasMask>
            </FlatDetails>
        </Insertion>

        <!-- oferty do deaktywacji -->
        <Insertion>
            <ID>321</ID>
            <Action>1</Action>
        </Insertion>
        <Insertion>
            <ID>322</ID>
            <Action>1</Action>
        </Insertion>
        <!-- oferty do usunięcia -->
        <Insertion>
            <ID>323</ID>
            <Action>2</Action>
        </Insertion>
        <Insertion>
            <ID>324</ID>
            <Action>2</Action>
        </Insertion>
    </Insertions>
</otoDom>';

        $filter = new Compress('Zip');
        return $filter->filter($testData);
    }

    public function headerDomiporta()
    {
        return
            '<?xml version="1.0" encoding="UTF-8"?>
<Domiporta xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespacesSchemaLocation="domiporta.xsd">
   <Informacje>
      <RodzajPaczki>przyrost</RodzajPaczki>
      <Program>Eksport z www</Program>
      <WersjaProgramu>1.0</WersjaProgramu>
   </Informacje>
   <Oferty>
      <Nieruchomości>';
    }

    public function prepareOneOfferForDomiporta(SalesUnit $salesUnit)
    {
        return ('<Oferta>' .
            $this->writeLn('ID', 1) .
            $this->writeLn('Nr_oferty', $salesUnit->getOfferNumber()) .
            $this->writeLn('KategoriaNazwa', $salesUnit->getType()->getNameDomiporta()) .
            $this->writeLn('Operacja', 'sprzedaż') .
            $this->writeLn('Cena', $salesUnit->getPrice()) .
            $this->writeLn('Waluta', 'PLN') .
            $this->writeLn('Do_megocjacji', 'false') .
            $this->writeLn('Ulica', $salesUnit->getSite()->getStreet()) .
            $this->writeLn('Dzielnica', $salesUnit->getSite()->getQuarter()) .
            $this->writeLn('Miasto', $salesUnit->getSite()->getCity()) .
            $this->writeLn('Gmina', '') .
            $this->writeLn('Powiat', $salesUnit->getSite()->getDistrict()) .
            $this->writeLn('Województwo', $salesUnit->getSite()->getProvince()->domiporta) .
            $this->writeLn('Agent', $salesUnit->getUser()->getUserName() . $salesUnit->getUser()->getPhone()) .
            $this->writeLn('Nr_licencji', $salesUnit->getUser()->getLicence()) .
            $this->writeLn('Powierzchnia', $salesUnit->getArea()) .
            $this->writeLn('Liczba_łazienek', $salesUnit->getNoOfBathrooms()) .
            $this->writeLn('Liczba_pieter', $salesUnit->getSite()->getNumberOfFloors()->floor) .
            $this->writeLn('Pietro', $salesUnit->getFloor()->getFloor()) .
            $this->writeLn('Opis', $salesUnit->getDescription()) .
            $this->writeLn('Rok', $salesUnit->getSite()->getConstructionYear()) .
            $this->writeLn('Material', 245) .//TODO sprawdzić bibliotekę
            $this->writeLn('Glosnosc', $salesUnit->getNoise()->getDomiporta()) .
            "<Zdjecia>" .
            "</Zdjecia>" .
            "</Oferta>");
    }

    public function prepareWholeFileForDomiportaAction()
    {
        $unitsToAdd = $this->getRepository("Notice\\Model\\SalesUnit")->findBy(['isNew' => true]);

        $fileContent = '';
        $fileContent .= $this->headerDomiporta();
        foreach ($unitsToAdd as $unit) {
            $fileContent .= $this->prepareOneOfferForDomiporta($unit);
        }
        $fileContent .= $this->footerDomiporta();
        //$fileName = __DIR__.'notices/domiporta.zip';
        //$filter = new Compress('zip');
        // return $filter->filter($fileContent);
        return new ViewModel($fileContent);
    }

    public function getCurrentDate()
    {
        $date = new DateTime('NOW');
        $date->setFormat('y-m-j');
        return $date;

    }

    public function footerDomiporta()
    {
        return
            '      </Nieruchomości>
   </Oferty>
';
    }

    public function preparePartForDomiporta(SalesUnit $salesUnit, $id)
    {
        $this->headerForDomiporta();

        $this->footerDomiporta();
    }

    public function writeLn($tag, $content)
    {
        return "<" . $tag . ">" . $content . "</" . $tag . ">\r\n";
    }

    public function sendToGumtreeAction()
    {
        $formForGumtree = ['locationId' => '3200366',
            'categoryId' => '9073',
            'DwellingForSaleBy' => 'ownr',
            'DwellingType' => 'flat',
            'AreaInMeters' => '44',
            'NumberRooms' => '2',
            'NumberBathrooms' => '10',
            'Parking' => 'covrd',
            'Title' => 'Mieszkanie na Gruwaldzie',
            'Description' => '<p>Ladne mieszkanie na sprzedaz</p>',
            'priceTypes' => 'fixed',
            'Price' => '20000',
            'currencyValues' => 'PLN',
            'UserName' => 'MarekM',
            'Email' => 'marek@thtg.pl'];


        $client = new Client(['base_uri' => 'http://www.gumtree.pl']);
        $response = $client->request('POST', 'http://www.gumtree.pl/post.html', [
            'form_params' => $formForGumtree,
        ]);

        echo $response->getBody();
        return $response->getStatusCode();
    }


    public function indexAction()
    {
        return new ViewModel([
            'returnData' => $this->getRepository("Notice\\Model\\SalesUnit")->findAll()
        ]);
    }

    public function addAction()
    {
        $form = $this->createForm('Notice\\Form\\' . $this->entityName . 'Form');
        $form->get('submit')->setValue('Dodaj');
        $request = $this->getRequest();

        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $dataToAdd = $form->getData();
                $noticeService = $this->getServiceLocator()->get('NoticeService');
                $noticeService->insertData($dataToAdd);
                return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['form' => $form];
    }

    public function editAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName,
                'action' => 'add']);
        }
        try {
            $dataToEdit = $this->getRepository("Notice\\Model\\" . $this->entityName)->find($id);
        } catch (\Exception $ex) {
            $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
        }

        /** @var Form $form */
        $form = $this->createForm('Notice\\Form\\' . $this->entityName . 'Form');
        $form->bind($dataToEdit);
        $form->get('submit')->setAttribute('value', 'Zapisz');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $this->getEntityManager()->flush();
                $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['form' => $form];
    }

    public function deleteAction()
    {
        $id = (int)$this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('notice', ['controller' => $this->controllerName, 'action' => 'index']);
        }
        $request = $this->getRequest();
        $dataToDelete = $this->getRepository("Notice\\Model\\" . $this->entityName)->find($id);
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');
            if ($del == "Yes") {
                $noticeService = $this->getServiceLocator()->get('NoticeService');
                $noticeService->deleteData($dataToDelete);
                $this->flashMessenger()->addMessage('Usunięto!');
                var_dump($this->controllerName);
                return $this->redirect()->toRoute('notice',
                    ['controller' => $this->controllerName, 'action' => 'index']);
            }
        }
        return ['dataToDelete' => $dataToDelete];
    }

}