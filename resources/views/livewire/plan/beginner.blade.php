<div class="flex flex-wrap" id="tabs-id">
  <div class="w-full">
      
    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">

      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-primary" onclick="changeAtiveTab(event,'tab-basico')">
          <i class="far fa-smile-beam text-base mr-2"></i>Básico
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-primary bg-white" onclick="changeAtiveTab(event,'tab-general')">

          <i class="far fa-laugh-wink text-base mr-2"></i>  General
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-primary bg-white" onclick="changeAtiveTab(event,'tab-especifico')">

          <i class="far fa-grin-hearts text-base mr-2"></i>  Especifico
        </a>
      </li>
    </ul>

    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">

      <div class=" flex-auto">
        <div class="tab-content tab-space">

          <div class="block" id="tab-basico">
              @livewire('plan.components.beginners.basico')
          </div>

          <div class="hidden" id="tab-general">
            @livewire('plan.components.beginners.general')
          </div>

          <div class="hidden" id="tab-especifico">
            @livewire('plan.components.beginners.especifico')
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function changeAtiveTab(event,tabID){
    let element = event.target;
    while(element.nodeName !== "A"){
      element = element.parentNode;
    }
    ulElement = element.parentNode.parentNode;
    aElements = ulElement.querySelectorAll("li > a");
    tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
    for(let i = 0 ; i < aElements.length; i++){
      aElements[i].classList.remove("text-white");
      aElements[i].classList.remove("bg-primary");
      aElements[i].classList.add("text-primary");
      aElements[i].classList.add("bg-white");
      tabContents[i].classList.add("hidden");
      tabContents[i].classList.remove("block");
    }
    element.classList.remove("text-primary");
    element.classList.remove("bg-white");
    element.classList.add("text-white");
    element.classList.add("bg-primary");
    document.getElementById(tabID).classList.remove("hidden");
    document.getElementById(tabID).classList.add("block");
  }
</script>

