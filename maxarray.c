
#include <stdio.h>

int main()
{
    int a[20],i,max=-1,size;
    scanf("%d",&size);
    for(i=0;i<size;i++)
    {   
        scanf("%d",&a[i]);
        if(a[i]>max)
        {
            max=a[i];
        }
    }
    printf("%d",max);
    return 0;
}
