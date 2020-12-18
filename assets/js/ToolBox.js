class ToolBox
{
    static animationOn = true;
    static animateOpacity(element, duration)
    {
        if (ToolBox.animationOn)
        {
            ToolBox.animationOn = false;
            var currentOpacity = element.style.opacity;
            var decIncAmount = 5 / duration;
    
            if (currentOpacity = "" || currentOpacity >= 1)
            {
                currentOpacity = 1;
                var intervalId = setInterval(function()
                {
                    currentOpacity -= decIncAmount;
                    currentOpacity = parseFloat(currentOpacity.toFixed(4));
                    if (currentOpacity >= 0)
                    {
                        element.style.opacity = currentOpacity;
                    }
                    else
                    {
                        clearInterval(intervalId);
                        element.style.visibility = "hidden";
                        ToolBox.animationOn = true;
                    }
                }, 5);
            }
            else
            {
                currentOpacity = 0;
                element.style.visibility = "visible";
                var intervalId = setInterval(function()
                {
                    currentOpacity += decIncAmount;
                    currentOpacity = parseFloat(currentOpacity.toFixed(4));
                    if (currentOpacity <= 1)
                    {
                        element.style.opacity = currentOpacity;
                    }
                    else
                    {
                        clearInterval(intervalId);
                        ToolBox.animationOn = true;
                    }
                }, 5);
            }
        }
    }
}