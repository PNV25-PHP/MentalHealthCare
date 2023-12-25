class Button
{
    #label
    #onClick
    #customClass

    static new () {
        var newButton = new Button()
        return newButton
    }

    #initHtml() {
        const ele = document.createElement("button");

        ele.setAttribute("type", "button");
        ele.setAttribute("class", "py-2 w-full flex bg-blue-900 border border-2 rounded-lg border-blue-600 " + this.#customClass);

        ele.onclick = this.#onClick
        ele.innerHTML = this.#label

        return ele
    }

    setLabel(label) {
        this.#label = label
        return this
    }

    setOnClick(onClick) {
        this.#onClick = onClick
        return this
    }

    setCustomClass(customClass) {
        this.#customClass = customClass
        return this
    }

    appendTo(containerId) {
        document
        .getElementById(containerId)
        .appendChild(this.#initHtml())
    }
}

class Button2{
    #label
    #id
    #onClick
    #customClass = " "

    static new(){
        let compo_Button = new Button2();
        return compo_Button;
    }

    setLabel(label){
        this.#label = label;
        return this;
    }

    setid(id){
        this.#id = id;
        return this;
    }

    setcustomClass(customClass){
        this.#customClass = customClass;
        return this;
    }

    #initHtml(){
        const element1 = document.createElement("input");

        element1.setAttribute("type", "button");
        element1.setAttribute("id", this.#id);
        element1.setAttribute("value", this.#label);
        element1.setAttribute("class", this.#customClass);
        element1.onclick = this.#onClick;
        element1.innerHTML = this.#label
        return element1;
    }

    setOnClick(url) {
        this.#onClick = () => {
            window.location.href = url;
        };
        return this;
    }
    
    appendTo(containerId) {
        document
            .getElementById(containerId)
            .appendChild(this.#initHtml())
    }
}